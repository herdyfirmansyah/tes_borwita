@include('layout.header')
  <div class="row">
  <div class="col-md-12">
  <form class="form-inline">
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control"  id="searchForm" placeholder="Cari Buku">
    </div>
    <button type="submit" class="btn btn-primary mb-2">CARI</button>
  </form>
  </div>    
    @if (isset($data))
        @foreach($data as $value )
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="https://www.pngall.com/wp-content/uploads/2018/05/Books-PNG.png" alt="book_default" height="100" width="100" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"> 
                             <p>Title :</p>
                        </div> 
                        <div class="col-md-6"> 
                             {{  $value->title }}
                        </div>         
                    </div>
                    <div class="row">
                        <div class="col-md-6"> 
                             <p>Author :</p>
                        </div> 
                        <div class="col-md-6"> 
                             {{  $value->author }}
                        </div>         
                    </div> 
                    <div class="row">
                        <div class="col-md-6"> 
                             <p>Genre :</p>
                        </div> 
                        <div class="col-md-6"> 
                             {{  $value->genre }}
                        </div>         
                    </div>
                    <div class="row">
                        <div class="col-md-6"> 
                             <p>Jumlah Vote :</p>
                        </div> 
                        <div class="col-md-6"> 
                             {{  $value->vote_count }}
                        </div>         
                    </div>  
                    <div class="row">
                        <div class="col-md-6"> 
                           <button class="btn btn-primary">VOTE</button>
                        </div> 
                    </div>                     
                </div>
            </div>
        </div>
        @endforeach
    @endif
  </div>
  <script>

    $(document).on("keyup", "#searchForm",  function(){
        var txt = $(this).val();
        if(txt == ""){
            app.show()
        }else{
            $("tbody").html("");
            $.ajax({
                url: "{{ route('caribuku') }}",
                method: "GET",
                data: {type: "searchTxt", dataSearch: txt},
                success: function(response){
                    $("tbody").html(response)
                }
            })
        }
    });
  </script>
@include('layout.footer')

