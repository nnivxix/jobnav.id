<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', [
            'companies' => $companies,
        ]);
    }
    public function create()
    {
        return view('companies.add');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'avatar'       => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            'image_cover'  => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "name"         => "required|string",
            "slug"         => "required|string",
            "ownedby"      => "number",
            "about"        => "string",
            "location"     => "string",
            "website"      => "string",
            "full_address" => "string",
        ]);
        $avatar = $request->file('avatar');
        if ($avatar) {
            $avatar_file_name = Str::random(40) . '.' . $avatar->getClientOriginalExtension();
            $avatar->storePubliclyAs('company/avatars', $avatar_file_name, 'public');
            $validate['avatar'] = 'company/avatars/' . $avatar_file_name;
        }
        Company::create($validate);
        return redirect('/companies');
    }

    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company,
        ]);
    }

    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' =>  $company,
        ]);
    }
    public function update(Request $request, $slug)
    {
        $company = Company::where('slug', $slug)->first();
        $avatar = $request->file('avatar');
        if ($avatar) {
            $avatar_file_name = Str::random(40) . '.' . $avatar->getClientOriginalExtension();
            Storage::delete('public/' . $company->avatar);
            $avatar->storePubliclyAs('company/avatars', $avatar_file_name, 'public');
            $company->avatar = 'company/avatars/' . $avatar_file_name;
        }
        $company->name = $request->name;
        $company->slug = $request->slug;
        $company->about = $request->about;
        $company->location = $request->location;
        $company->website = $request->website;
        $company->full_address = $request->full_address;

        $company->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
