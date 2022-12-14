<div class="hero lp-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-auto">
                <h1 >Pest Control Service</h1>
                <p class="pt-3">Suvidha Pest Control is well established in India as one of the leading pest management companies, serving public sector agencies, corporations and individual home-owners</p>
                <button class="btn btn-orange mt-3">Contact Us</button>
            </div>
            <div class="col-md-5">
                <div class="form shadow rounded p-4">
                    <form action="add_lead" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control">
                            <input type="hidden" name="company" class="form-control" value="1">
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-orange" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>