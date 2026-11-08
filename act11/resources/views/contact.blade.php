@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>GET IN TOUCH</h1>
    <p>Let's start a conversation. Questions, ideas, or just saying hello are always welcome.</p>

    <div style="display: flex; gap: 40px; margin-top: 20px;">
        <!-- Formulario -->
        <div style="flex: 2;">
            <h3>Send a message</h3>
            <p style="font-size: 13px; color: #666;">Fill in the details below and I'll get back to you soon.</p>
            
            <form action="#" method="POST" onclick="return false;">
                <div style="margin-bottom: 15px;">
                    <label style="display:block; font-size: 12px; font-weight: bold;">YOUR NAME</label>
                    <input type="text" placeholder="Ale Morgan" style="width: 100%; padding: 8px; box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display:block; font-size: 12px; font-weight: bold;">EMAIL ADDRESS</label>
                    <input type="email" placeholder="ale@example.com" style="width: 100%; padding: 8px; box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display:block; font-size: 12px; font-weight: bold;">MESSAGE</label>
                    <textarea rows="4" placeholder="What would you like to talk about?" style="width: 100%; padding: 8px; box-sizing: border-box;"></textarea>
                </div>

                <button type="submit" style="padding: 10px 20px; background: #333; color: white; border: none; cursor: pointer;">SEND MESSAGE</button>
            </form>
        </div>

        <!-- Información adicional -->
        <div style="flex: 1; border-left: 1px solid #eee; padding-left: 20px;">
            <h3>ELSEWHERE</h3>
            <p><strong>Email:</strong><br>hello@fieldnotes.example</p>
            <p><strong>Location:</strong><br>Your City, Your Country</p>
            <p><strong>Response time:</strong><br>Usually within two business days</p>
        </div>
    </div>
@endsection