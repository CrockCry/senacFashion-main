<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Estilista;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Home::first();
        $estilistas = Estilista::take(3)->get();
        $estilistas = Estilista::where('status', 1)->get();

        return view('home', compact('banner', 'estilistas'));
    }

        // Métodos para Banner
        public function createBanner()
        {
            return view('dashboard.bannerHome.createBanner');
        }

        public function storeBanner(Request $request)
        {
            $request->validate([
                'banner_path' => 'required|mimes:mp4,avi,mov|max:20048',
                'status' => 'required|boolean'
            ]);

            Home::create([
                'banner_path' => $request->file('banner_path')->store('banners', 'public'),
                'status' => $request->input('status')
            ]);

            return redirect()->route('dashboard.index')->with('success', 'Banner criado com sucesso.');
        }

        public function editBanner($id)
        {
            $banner = Home::find($id);
            return view('dashboard.bannerHome.editBanner', compact('banner'));
        }

        public function updateBanner(Request $request, $id)
        {
            $request->validate([
                'banner_path' => 'nullable|mimes:mp4,avi,mov|max:20048',
                'status' => 'required|boolean'
            ]);

            $banner = Home::find($id);

            if ($request->hasFile('banner_path')) {
                $bannerPath = $request->file('banner_path')->store('banners', 'public');
            } else {
                $bannerPath = $banner->banner_path;
            }

            $banner->update([
                'banner_path' => $bannerPath,
                'status' => $request->input('status')
            ]);

            return redirect()->route('dashboard.index')->with('success', 'Banner atualizado com sucesso.');
        }

        public function destroyBanner($id)
        {
            $banner = Home::find($id);
            $banner->delete();

            return redirect()->route('dashboard.index')->with('success', 'Banner deletado com sucesso.');
        }

        public function toggleStatusBanner($id)
        {
            $banner = Home::find($id);
            $banner->status = !$banner->status;
            $banner->save();

            return redirect()->route('dashboard.index')->with('success', 'Status do banner atualizado com sucesso.');
        }

}
