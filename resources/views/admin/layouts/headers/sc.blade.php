<div class="col-md-9">
    <div class="row">
        <div class="col">
            <form>
                <select class="form-control" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                    <option>Alerts</option>
                    <option>Badges</option>
                    <option>Buttons</option>
                    <option>Cards</option>
                    <option>Forms</option>
                    <option>Modals</option>
                </select>
            </form>
            
        </div>
        <div class="col">
            <form>
                <select class="form-control" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                    <option>Alerts</option>
                    <option>Badges</option>
                    <option>Buttons</option>
                    <option>Cards</option>
                    <option>Forms</option>
                    <option>Modals</option>
                </select>
            </form>
        </div>
        <div class="col">
            <form action="" method="POST" class="d-flex">
                {{ csrf_field() }}
                <input href class="col-xl-12 form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>