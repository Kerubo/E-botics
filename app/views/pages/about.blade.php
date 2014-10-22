@extends('layouts.sidebar')
@section('content')

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="banner" style=" background:watoto.jpg;">
  <div class="page-header">
    
    <div class="pull-right btn-group">
      
      <a href="/signup" class="btn btn-primary" style="color:orange;">Signup</a>
    </div>
    
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary" style="color:orange;">Login</a>
    </div>



    
  
    <h1 style="color:#F05A28;background:#016DA0;">E-botics  Kenya</h1>
  </div>
  <p>
  {{Form::open(['route' => 'contents.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  <br>
  <h2>CREATING A GENERATION THAT THINKS NOT THAT FOLLOWS</h2>
  Website application that teaches kids from
the ages of 6-14 years on entrepreneurship
and robotics.
Focusing on primary school students from the age of 6 to 14 who have a passion in technology
but have no means of accessing the tutorials or means to learn the subjects by themselves, We
have therefore taken the initiative of finding out from the students and parents how much they
would like to have access of this vital information.<br><br>

   THE BEST OPTION FOR YOU AND YOUR CHILD<br>
The application will provide a platform for children to learn Robotics and explore in new ideas
through entrepreneurship especially after having the privilege of attending the kid’s hacker
camps.
Basing on the fact that many similar applications will mainly focus on the school curriculum,
ours will focus on making the children explore on new ideas, enhance their creativity and
eventually make them innovative thinkers.
By providing a platform for reference after going through the hacker camps, there will rise the
need for the students to want to go to such camps for more, parents will in turn be part of this
through the application.
The application will be used by parents , teachers and the hackathons facilitators to analyse the
child's memory capacity, understanding as well as their ability to solve problems that arise with
time, all these shall be based on the part of the entrepreneurship as it is all about things that
affects us in our daily lives, the opportunities that we have and the perspective of how we look at
life.
In this way parents /guardians and teachers will be able to know their child/children's potential
and will in return get to assist them accordingly.<br><br>


THE VIABILITY OF THE VENTURE<br>
The application will provide a platform for children to learn Robotics and explore in new ideas
through entrepreneurship especially after having the privilege of attending the kid’s hacker
camps.
Basing on the fact that many similar applications will mainly focus on the school curriculum,
ours will focus on making the children explore on new ideas, enhance their creativity and
eventually make them innovative thinkers.
By providing a platform for reference after going through the hacker camps, there will rise the
need for the students to want to go to such camps for more, parents will in turn be part of this
through the application.
The application will be used by parents , teachers and the hackathons facilitators to analyse the
child's memory capacity, understanding as well as their ability to solve problems that arise with
time, all these shall be based on the part of the entrepreneurship as it is all about things that
affects us in our daily lives, the opportunities that we have and the perspective of how we look at
life.
In this way parents /guardians and teachers will be able to know their child/children's potential
and will in return get to assist them accordingly.
  </p>
 
<div class="pull-right btn-group">
      <a href="/logout" class="btn btn-primary" style="color:#FO5A28;">Next Step</a>
    </div>
    </div>
  @foreach ($contents as $content)
    <li>
      <h2>
        <a href="{{route('contents.show', [$content->slug])}}">
          {{$content->title}}
        </a>
      </h2>
    </li>
  @endforeach

  {{$contents->links()}}

 
	i am the about page
@stop