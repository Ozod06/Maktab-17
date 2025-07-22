@extends('admin.site')
@section('content')

        <!-- Image Header Start-->
        <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">{{ __('message.resourse') }} </h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">{{ __('message.home') }}</a></li>
                            <li class="breadcrumb-item " aria-current="page">{{ __('message.resourse') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Image Header End -->

<!-- Main section Start -->
<main>
    <section>
        <div class="useful-links">
            <div class="container">
                <div class="pageView">
                    <div class="projectView">
                        <img src="{{ asset('admin/images/' . $resourse->image) }}" alt="{{ $resourse['title_'. \Illuminate\Support\Facades\App::getLocale()] }}" style="max-width: 100%; height: auto;">



                        <div class="description">
                            <h1>{{ $resourse['title_'. \Illuminate\Support\Facades\App::getLocale()] }}</h1>

                            <p>{{ $resourse['body_'. \Illuminate\Support\Facades\App::getLocale()] }}</p>

                            <table id="w0" class="table detail-view projectTable">
                                <tbody>
                                <tr>
                                    <th>Veb-sayt</th>
                                    <td><a href="https://attestat.uzedu.uz/"
                                           target="_blank">https://attestat.uzedu.uz/</a></td>
                                </tr>
                                <tr>
                                    <th>Qo'shimcha ma'lumot</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Saytga havola</th>
                                    <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAACgCAIAAAAErfB6AAAACXBIWXMAAA7EAAAOxAGVKw4bAAADEUlEQVR4nO3dvUoEQRAAYU80Ft//IcXYxMBsR5il6Z+5or7MwPPYYqAddmcf318/L+J6nf4CqmVgOAPDGRju7fLzx+f7yPf4E5v41u982ud0unxnVzCcgeEMDGdgOAPDXafoVd1e5p1ps24ivTMzZ83Vg9fQFQxnYDgDwxkYzsBw+yl6FZtssyZJxh0KbdfQFQxnYDgDwxkYzsBwkSm6U+f+cGxv/PCp3hUMZ2A4A8MZGM7AcKdP0VmT7ez++SBXMJyB4QwMZ2A4A8NFpujZ2TI2Ic8+b7hqu4auYDgDwxkYzsBwBobbT9GzJ05kyXqWMDZXD15DVzCcgeEMDGdgOAPDXadowD0ML9N7yEddQ1cwnIHhDAxnYDgDw0XOi+7coY1Nraedj3dH0Z0qrmA4A8MZGM7AcAaGyznpru5e5djnZE22WdN41vUJfB9XMJyB4QwMZ2A4A8M9Arcf1E3Ip+1yxz75jrZnJF3BcAaGMzCcgeEMDHedojvf6Bcze2bdaafqbb+PKxjOwHAGhjMwnIHhImd01O0zr2J3a9RNtp1PKabse7uC4QwMZ2A4A8MZGG5/R0fn84Z3nLYTXneHScrk7wqGMzCcgeEMDGdguP0ZHXUnYGTtRZ/212PXsOheGlcwnIHhDAxnYDgDw0X2ojuf7zvq1Lh/P6fzXYoBrmA4A8MZGM7AcAaGi5wXvarbfc0yu6N+57d8ulARBoYzMJyB4QwMl/Puws43+s2eULc67cS8C1cwnIHhDAxnYDgDw+XsRWd5xr3o1VGnmriC4QwMZ2A4A8MZGG5/0l3dZNt5//Ds3SMxnnSnPQPDGRjOwHAGhst5A/gds9N47HPaTnX+92+l/JfhCoYzMJyB4QwMZ2C4yBTdqe6Mjs7TNgb/73AFwxkYzsBwBoYzMNzpU3Rssq27V2T2HSuBE6RdwXAGhjMwnIHhDAwXmaJn3xUYU/d2xbo7rlOeiHQFwxkYzsBwBoYzMNx+ip49tSOm7uS92VOmA1zBcAaGMzCcgeEMDLd/d6GemisYzsBwBoYzMNwvxACCuNxIF1wAAAAASUVORK5CYII="
                                             alt=""></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="projectImages">
                    </div>


                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection
