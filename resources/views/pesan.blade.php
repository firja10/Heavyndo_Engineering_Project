<!-- resources/views/chat.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">


    <chat-component :user="{{ auth()->user() }}"/>

    
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body">
    
                    <chat-messages :messages="messages"/>
                </div>

                <div class="panel-footer">
       
                    <chat-form
                    v-on:messagesent="addMessage"
                    :user="{{ Auth::user() }}"
                />
                </div> --}}
            

             {{-- <div id = "app">

                <about-us/>

                <br>

                <example-component/>

             </div> --}}




            
            {{-- </div>


        </div>
    </div> --}}





</div>
@endsection