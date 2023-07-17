@extends('front_layouts/layout')
@extends('front_layouts/header')
@section('contentSection')
 <!--============================== Content Start ==============================-->
 <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-heqading">
                        <h3>Library</h3>
                    </div>
                    <div class="about-content">
                        <p>In pharmacy education, library use appears to provide independent contributions to the institution's desired objectives. Librarians play an essential role in helping students become information literate. The library has several parts such as Administrator and book issue section, reading section, reference section, and journal section. All the books are organized by subject and shelved in appropriately labelled cupboards. Each book is assigned an accession number. The issue-return reference books and boos are kept separately.</p>
                        <p>The most recent volumes and issues of subscribing journals are available in the library's journals ection. Every year, old volumes and issues of hard copy journals are hard bound and labelled, and a separate register is kept for tracking, issues, and returns</p>
                    </div>
                    <ul class="library-book-list">
                        <h6>The detailed list of Books, Journals, Year Books and Electronics Publication (CD ROMs) is given below--</h6>
                        <li>Total No. of books: </li>
                        <li>Total No. of titles:  </li>
                        <li>Total no. of subscribed Journals:  </li>
                        <li>Total No. of Electronic C.D. Rom etc:</li>
                        <li>Name of software used in digital library: </li>
                    </ul>
                </div> 
                <div class="col-md-5">
                    <div class="faculty-img">
                        <img src="{{asset('assets/front/images/library-img.jpeg')}}" alt="">                        
                    </div>
                </div>                           
            </div>
        </div>
    </div>
    @endsection