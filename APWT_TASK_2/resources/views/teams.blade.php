@extends('app')
@section('content')
<div class="container mb-5 ">
    <div class="text-center mb-3"> <span class="text-danger">Our Portfolio</span>
        <h3>Creative Members</h3>
    </div>
    <div class="row g-2 text-center">
        <div class="col-md-4">
            <div class="card"> <img src="https://i.imgur.com/iNFaRXx.jpg" class="img-fluid rounded">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="info info-yellow"> <span class="user-icons"><img src="https://i.imgur.com/1NZfd8E.png" width="30"></span>
                        <div class="user-profile d-flex flex-row">
                            <div class="d-flex flex-column mr-4"> <span class="name">Sam Disauga</span> <small class="designation">Project Manager</small> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"> <img src="https://i.imgur.com/4IqYoqv.jpg" class="img-fluid rounded">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="info info-green"> <span class="user-icons"><img src="https://i.imgur.com/BeuqpVv.png" width="30"></span>
                        <div class="user-profile d-flex flex-row">
                            <div class="d-flex flex-column mr-3"> <span class="name">Nick Panagio</span> <small class="designation">Google Search Manager</small> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card"> <img src="https://i.imgur.com/LvZVIzy.jpg" class="img-fluid rounded">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="info info-blue"> <span class="user-icons"><img src="https://i.imgur.com/1NZfd8E.png" width="30"></span>
                        <div class="user-profile d-flex flex-row">
                            <div class="d-flex flex-column mr-4"> <span class="name">Samuel Marlon</span> <small class="designation">Team Member</small> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection