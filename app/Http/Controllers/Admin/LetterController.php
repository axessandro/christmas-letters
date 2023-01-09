<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Letter as Letter;
use Illuminate\Support\Facades\Validator;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = Letter::all();
        return view('letters.index', compact('letters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $this->validation($request->all());
        $newLetter = new Letter();
        $newLetter->fill($formData);
        $newLetter->save();
        return redirect()->route('letter.show', $newLetter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $letter = Letter::findOrFail($id);
        return view('letters.show', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
        return view('letters.edit', compact('letter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {
        $formData = $request->all();
        $letter->update($formData);
        return redirect()->route('letter.show', $letter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter)
    {
        $letter->delete();
        return redirect()->route('letter.index');
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'address' => 'required|max:100',
            'city' => 'required|min:2|max:100',
            'arrival_date' => 'required',
            'gift' => 'required',
            'text' => 'required',
            'kid_rating' => 'required|min:1|max:5',
            'delivered' => 'required|min:0|max:1'
        ], [
            'name.required' => 'First name is required',
            'name.max' => "Max 100 characters",
            'surname.required' => 'Last name is required',
            'surname.max' => "Max 100 characters",
            'address.required' => 'Address is required',
            'address.max' => "Max 100 characters",
            'city.required' => 'City is required',
            'city.min' => "Min 2 characters",
            'city.max' => "Max 100 characters",
            'arrival_date.required' => 'Arrival date is required',
            'gift.required' => 'Gift is required',
            'text.required' => 'Text is required',
            'kid_rating.required' => 'Kid rating is required',
            'kid_rating.min' => "Min 1 characters",
            'kid_rating.max' => "Max 5 characters",
            'delivered.required' => 'Delivered is required',
            'delivered.min' => "Min 0 characters",
            'delivered.max' => "Max 1 characters"
        ])->validate();
        return $validator;
    }
}
