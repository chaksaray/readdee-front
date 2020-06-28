$('[data-toggle="popover"]').popover({
    html: true,
    placement : 'auto',
    trigger : 'hover',
    content: function(){
        return '<div class="card border-0">'
        +'<div class="card-body p-1">'
        +'<div class="d-flex justify-content-start">'
            +'<img class="rounded-circle img-responsive img-thumbnail border-1 mr-2" src="https://cdn-images-1.medium.com/fit/c/64/64/1*MONYVFlSYPuRVykS8M0gBw.jpeg" style="width: 30px; heigh: 30px;" alt="Card image cap">'
            +'<div><h5 class="card-title mt-2 mb-0 pb-0"><b>Saray Chak</b></h5><span class="text-success"> Joined 2 months</span></div>'
        +'</div>'
          +'<p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>'
        +'</div>'
        +'<div class="card-body d-flex justify-content-between">'
          +'<p class="">12k followers</p>'
          +'<a href="#" class="btn btn-outline-success">Follow</a>'
        +'</div>'
      +'</div>';
    }
});