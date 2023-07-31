<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
class PartnerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.pages.partner.partner', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'partner_name' => 'required',
            'desciption' => 'required',
          
        ]);
        $img_name = 'img_'.time().'.'.$request->logo->getClientOriginalExtension();
        $request->logo->move(public_path('frontend_assets/img/'),$img_name);
        Partner::create([
            'partner_name'=> $request->partner_name,
            'desciption' => $request->desciption,
            'logo' => $img_name,
            
            'site_url' => $request->site_url,
           
        ]);

        return redirect()->route('partner.index')
            ->with('message', 'partner  added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('partner.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partner.edit', compact('partner'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'partner_name' => 'required',
            'desciption' => 'required',
        ]);
        $partner->update($request->all());

        return redirect()->route('partner.index')
            ->with('message', 'Partner updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();

        return redirect()->route('partner.index')
            ->with('message', 'partner  deleted successfully');
    }
    public function getAllPartnerMembers(){
        $partners = Partner::all();
        return view('frontend/pages/ourpartners', compact('partners'));
    }
}
