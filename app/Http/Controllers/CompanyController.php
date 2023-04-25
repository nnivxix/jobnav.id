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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' =>  $company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
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
