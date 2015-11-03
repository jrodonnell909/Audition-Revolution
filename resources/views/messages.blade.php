@extends('master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<div zf-panel position="left" id="sub-nav" class="fast bounceInOut medium-3 medium-grid-content">
	<a class="button expand" zf-open="compose">Compose</a>
	<section class="block-list with-icons">
	  <ul>
	  	<li class="hide-for-medium">
	  		<img src="http://placehold.it/1x1" alt="">
	      <a zf-close="sub-nav">Close</a>
	    </li>
	    <li>
	    	<img src="http://placehold.it/1x1" alt="">
	      <a href="#">Inbox</a>
	    </li>
	    <!-- With an icon -->
	    <li>
	      <img src="http://placehold.it/1x1" alt="">
	      <a href="#">Sent Messages</a>
	    </li>
	    <li>
	    	<img src="http://placehold.it/1x1" alt="">
	    	<a href="#">Favorited</a>
	    </li>
	  </ul>
	</section>
</div>

<div class="small-12 medium-3 messages grid-content">
  <a class="button secondary expand hide-for-medium" zf-open="sub-nav">This</a>
  <section class="block-list">
  	<li>
  		<input type="text" placeholder="Search">
   	</l1>
		<li>
	    <a zf-toggle="message">
	    	<h5>This is a message</h5>
	    	<p>It's a pretty long message, but thats chill, we totes like to read now a days.</p>
	    </a>
	  </li>
	  <li>
	    <a zf-toggle="message">
	    	<h5>This is a message</h5>
	    	<p>It's a pretty long message, but thats chill, we totes like to read now a days.</p>
	    </a>
	  </li>
	  <li>
	    <a zf-toggle="message">
	    	<h5>This is a message</h5>
	    	<p>It's a pretty long message, but thats chill, we totes like to read now a days.</p>
	    </a>
	  </li>
	  <li>
	    <a zf-toggle="message">
	    	<h5>This is a message</h5>
	    	<p>It's a pretty long message, but thats chill, we totes like to read now a days.</p>
	    </a>
	  </li>
	  <li>
	    <a zf-toggle="message">
	    	<h5>This is a message</h5>
	    	<p>It's a pretty long message, but thats chill, we totes like to read now a days.</p>
	    </a>
	  </li>
	  <li>
	    <a zf-toggle="message">
	    	<h5>This is a message</h5>
	    	<p>It's a pretty long message, but thats chill, we totes like to read now a days.</p>
	    </a>
	  </li>
  </section>
</div>

<div zf-panel id="message" position="right" class="fast bounceInOut small-12 medium-6 medium-grid-content">
  <a class="hide-for-medium button tiny" zf-close="message">Back</a>
  <h2>This is a message</h2>
  <p>Mike Meyers - 6/12/2014</p>
  <hr />
  <p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu.
	</p>
	<p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu.
	</p>
	<p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu.
	</p>
	<p>Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu.
	</p>
</div>

<!-- Start Compose Message -->
<zf-modal overlay="true" id="compose">
	<div class="grid-block vertical">
		<div class="primary title-bar">
			<div class="center title">Compose Message</div>
			<span class="left"><a zf-close="compose" href="#">Cancel</a></span>
			<span class="right"><a href="#">Send</a></span>
		</div>
		<div class="grid-content">
			<label>Email
        <input type="text" placeholder="email@zmail.com" />
      </label>
			<label>Message
        <textarea placeholder="hello..."></textarea>
      </label>
		</div>
		</div>
	</div>
</zf-modal>
<!-- End Compose Message -->

@endsection
