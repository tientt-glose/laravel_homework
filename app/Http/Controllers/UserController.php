<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    protected $data = [
        [
            'name' => 'Nguyen Van Khoa',
            'dob' => 1990
        ],
        [
            'name' => 'Nguyen Manh Tien',
            'dob' => 1998
        ],
        [
            'name' => 'Nguyen Trong Nghia',
            'dob' => 2000
        ]
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        # To do Hoi a vi ko dung duoc compact
        dd($this->data);
        return view('user.index', [
            'data' => $this->data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request('name'));
        //to do co cach add phan tu nao don gian, arr_add helper
        // array_push($this->data,[
        //     'name' => request('name'),
        //     'dob' => request('dob')
        // ]);
        $this->data[] = [
            'name' => request('name'),
            'dob' => request('dob')
        ];
        // dd($this->data);
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
