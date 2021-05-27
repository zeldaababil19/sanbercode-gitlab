@extends('layout.master')

@section('title')
    Halaman Utama
@endsection

@section('content')
  <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>
  <form action="/daftar" method="POST">
  @csrf
  <label
  >First Name :
  <br />
  <br />
  <input type="text" name="firstname" required />
</label>
<br />
<br />

<label
  >Last Name :
  <br />
  <br />
  <input type="text" name="lastname" required />
</label>
<br />
<br />

<label>Gender:</label>
<br />
<br />
<input type="radio" name="gender" value="male" />Male <br />
<input type="radio" name="gender" value="female" />Female <br />
<input type="radio" name="gender" value="other" />Other <br />
<br />

<label
  >Nationality:
  <br />
  <br />
  <select name="nationality" id="dropdown">
    <option>Indonesia</option>
    <option>Amerika</option>
  </select>
</label>
<br />
<br />

<label>Language Spoken:</label>
<br />
<br />
<input type="checkbox" name="language" value="indonesia" />Indonesia
<br />
<input type="checkbox" name="language" value="Inggris" />Inggris
<br />
<input type="checkbox" name="language" value="Other" />Other
<br />
<br />

<label id="bio-label"
  >Bio:
  <br />
  <br />
  <textarea name="bio" id="bio" cols="30" rows="10"> </textarea>
</label>
<br />
<input type="submit" value="daftar" />

@endsection