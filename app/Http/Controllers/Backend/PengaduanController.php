<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function create(): View
    {
        return view('backend.pengaduan.index');
    }


    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Pengaduan';

        // module name
        $this->module_name = 'pengaduan';

        // directory path of the module
        $this->module_path = 'pengaduan';

        // module icon
        $this->module_icon = 'c-icon fas fa-circle-exclamation';

        // module model name, path
        $this->module_model = "App\Models\User";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        

        $module_action = 'List';

        $$module_name = DB::table('pengaduan')->where('email', Auth::user()->email)->paginate(10);
        // $$module_name = DB::table('pengaduan')->paginate(10);
        $module_name_super = DB::table('pengaduan')->paginate(10);
        $count = DB::table('pengaduan')->count();

        Log::info(label_case($module_title).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "backend.{$module_path}.index",
            compact('module_title', 'module_name', "{$module_name}", 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'count', 'module_name_super')
        );
    }


    public function store(Request $request): RedirectResponse
    {


        $module_action = 'Store';

        $validated_data = $request->validate([
            'nama' => ['required', 'string', 'max:50'],
            'nohp' => ['required', 'string', 'max:10'],
            'deskripsi' => ['required', 'string']
        ]);

        $pengaduan = Pengaduan::create([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'deskripsi' => $request->deskripsi
        ]);

        flash('Sukses menambahkan pengaduan')->success()->important();

        return redirect('/admin/pengaduan');

    }

}
