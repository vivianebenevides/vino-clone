@extends('layouts.app')
@section('content')
<main class="auth-container">
      <form method="post" class="auth-form-container">
        @csrf
        <h1 class="auth-form-logo">
          The
          <br />
          Vine
        </h1>
        <label class="auth-form-label">
          <img src="{{asset('assets/user.png')}}" alt="user" class="auth-icon" />
          <input
            type="text"
            name="nom"
            class="auth-form-input"
            class="auth-icon"
            placeholder="Nom"
            required
          />
        </label>
        <label class="auth-form-label">
          <img src="{{asset('assets/mail.png')}}" alt="mail" class="auth-icon" />
          <input type="email" name="email" class="auth-form-input" placeholder="Courriel" required />
        </label>
        <label class="auth-form-label">
          <img src="{{asset('assets/lock.png')}}" alt="lock" class="auth-icon" />
          <input
            type="password"
            name="password"
            class="auth-form-input"
            placeholder="Mot de passe"
            required
          />
        </label>
        <label class="auth-form-label">
          <img src="{{asset('assets/lock.png')}}" alt="lock" class="auth-icon" />
          <input
            type="password"
            name="password_confirmation"
            class="auth-form-input"
            placeholder="Confirmation mot de passe"
            required
          />
        </label>
        <input
          type="submit"
          class="auth-form-input-submit"
          value="Enregistrer"
        />
      </form>
      <a href="/login" class="auth-form-text">Connexion</a>
    </main>

@endsection