<article>
    
    <nav> 
        <ul class="list-inline container pt-3 d-flex align-items-baseline border-bottom" >
          <h1 class="flex-fill list-inline-item text-uppercase ">Nuove uscite</h1>

            {{-- $navlinks prende i valori dal database config --}}
            @foreach ($navLinks as $link)
                <li class="list-inline-item px-3" >{{ $link['title'] }} </li>
            @endforeach

        </ul>
    </nav>
</article>
