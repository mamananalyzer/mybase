<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $account = DB::table('accounts')->get();
        $account = Account::all();
        return view('accounts/index', ['account' => $account]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('picture');

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
            'sites' => 'required',
            'phonenumber' => 'required',
            'info' => 'required'
        ]);

        // $image=$request->picture;
        // if($image){
        //     $imageName=$image->getClientOriginalName();
        //     $image->move('images/', $imageName);
        //     $formInput['picture']=$imageName;
        // }


        Account::create($formInput);

        return redirect('/accounts')->with('status',
        'Terima kasih sudah menginput data, data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('accounts/edit')
        ->with(compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'sites' => 'required'
        ]);
        // dd($request->all());
        $account = Account::find($id);
        $account->update($request->all());
        // if($request->hasFile('picture')){
        //     $request->file('picture')->move('images/',$request->file('picture')->getClientOriginalName());
        //     $account->picture = $request->file('picture')->getClientOriginalName();
        //     $account->save();
        // }
        return redirect('/accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accounts  $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        Account::destroy($account->id);
        return redirect('/accounts');
    }
}
