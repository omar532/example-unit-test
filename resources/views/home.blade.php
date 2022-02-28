<style>
    body, html{
        margin: 0;
        background: url('https://images.playerone.tv/source/jeux/gta-5/gta-5-gtav02272015_15-54f199f8ded3f.jpeg');
        background-size: cover;
        font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="post" nctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type = 'text' name = 'first_name'/>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name</label>
                            <input type = 'text' name = 'last_name'/>
                        </div>
                    <div class="card-footer">

                    </div>
                    </form>

                    </div>
            </div>
        </div>
    </div>
</div>
