<section class="contact py-4 bg-light-grey-color-shade" id="contact">
    <div class="container">
        <div class="section-title text-dark">
            <h2>Contact</h2>
            <div class="line"></div>
        </div>
        <div class="contact-content grid">
            <div class="contact-right">
                <div class="contact-info grid text-center text-dark" style="font-size: 8px; margin: 0;">
                    <div class="contact-info-group">
                        <span class="text-green">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </span>
                        <span class="text font-md fw-6">
                            Lazimpat, Kathmandu, Nepal
                        </span>
                    </div>
                    <div class="contact-info-group">
                        <span class="text-green">
                            <i class="fas fa-envelope fa-2x"></i>
                        </span>
                        <span class="text font-md fw-6">mayastore@gmail.com</span>
                    </div>
                    <div class="contact-info-group">
                        <span class="text-green">
                            <i class="fas fa-phone fa-2x"></i>
                        </span>
                        <span class="text font-md fw-6">+977 - 9849693933</span>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1713.4481511545378!2d85.32630837304225!3d27.720746931637958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1700635007363!5m2!1sen!2snp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="contact-left text-dark">
                @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>
                @endif
                <form  method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data" class="text-center text-white" >
                    @csrf
                    <div class="form">
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" />
                    </div>
                    <div class="form">
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email" />
                    </div>
                    <!-- <div class="form">
                        <select name="Select" class="form-control">
                            <option value="user">User</option>
                            <option value="artist">Artist</option>s
                        </select>
                    </div> -->
                    <div class="form">
                        <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message" rows="3">
                        </textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn-header text-white bg-brown">
                            Send
                        </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
