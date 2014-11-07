<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateIgnRequest;
use Illuminate\Support\Facades\Auth;
use App\Users\User;

class IgnController extends Controller {

    /**
     * Auth user first
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.ign');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateIgnRequest $request
     * @return Response
     */
    public function store(CreateIgnRequest $request)
    {
        $request = $request->only('ign');
        $user = User::find(Auth::user()->id);
        $user->ign = $request['ign'];
        $user->save();

        return redirect('wars');

    }

    /**
     * Display the specified resource.
     * GET /ign/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /ign/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /ign/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /ign/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}