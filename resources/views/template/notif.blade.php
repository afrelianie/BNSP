@foreach (['success', 'warning', 'danger'] as $status)
    @if (session($status))
        <section>
        <div class="alert alert-{{ $status }} alert-dismissable custom-{{ $status }}-box">
            <a href="" class="close-btn" data-dismiss="alert" aria-label="close">x</a>
            <strong>{{ session($status) }}</strong>
        </div>
        </section>
        <!-- alert section start -->
      <!-- <div class="alert">
        <span class="fas fa-check-circle mr-1"></span>
        <span class="msg">Success</span>
        <span class="close-btn">
            <span class="fas fa-times"></span>
        </span>
    </div> -->
    <!-- alert section end --> 
    @endif
@endforeach
