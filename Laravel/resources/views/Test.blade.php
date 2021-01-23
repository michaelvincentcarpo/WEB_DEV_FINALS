@extends('output.master')
@section('Title','TEST')
@section('section')

<div class="index-body">
                <div id="intro1" class="index-body"><h2>text here</h2></div>
                <div id="intro2" class="index-body">Sign Up</div>
                <div id="img" class="index-body"><br><br>
                <img src="" title="image section " color="white">
         </div><br>    
<div id="form1" class="index-body">
                    <label>Name</label><br>
                    <input placeholder="First Name" type="text" id="namebox" name="fname" />
                    <input placeholder="Last Name" type="text" id="namebox"  name="lname" /> <br><br>
                    <label>address</label><br>
                    <input placeholder="street" type="text" id="mailbox" name="address" />
                    <input placeholder="city" type="text" id="mailbox" name="address" /><br>
                    <input placeholder="postcode" type="text" id="mailbox" name="address" />
                    <input placeholder="country" type="text" id="mailbox" name="address" /><br><br>
                    <label>contact information</label><br>
                    <input placeholder="Contact" type="text" id="mailbox" name="Contact" />
                    <input placeholder="email" type="text" id="mailbox" name="email" /><br><br>
                    <label>date</label><br>
                    <input type="Date" name="date"><br><br>
                    <button class="submit" type="submit" name="submit">Submit</button>
                </div>     
@endesection