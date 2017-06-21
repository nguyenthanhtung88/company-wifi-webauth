<hr>
<div class="address">
    @foreach ($companies as $companyCountry)
        <div class="country-wrapper">
            <p class="country">
                {{ $companyCountry['country'] }}
            </p>

            <div class="branches">
                @foreach ($companyCountry['branches'] as $companyBranch)
                    @include('home._a_branch', compact('companyBranch'))
                @endforeach
            </div>
        </div>
    @endforeach
</div>
