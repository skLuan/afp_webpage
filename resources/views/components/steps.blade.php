<div id="tabs-work"
    class="swiper-pagination !relative bg-grey flex flex-row justify-evenly py-2 shadow-afp top-0 bottom-0">
</div>
<div class="swiperSteps overflow-hidden">
    <div class="swiper-wrapper">
        {{-- -------------------------cut of divs 1 Materials --}}
        <div class="swiper-slide">
            <div class="how-work-div grid grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <picture class="col-span-3 lg:col-span-7">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/m-small.png') }}">
                    <img class="h-full w-auto" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- --------------Information --}}
                <div
                    class="col-start-4 col-span-2 lg:col-start-8 lg:col-span-5 mt-8 mb-auto lg:my-auto lg:mx-auto lg:w-5/6 pr-5 lg:pr-0">
                    <picture class="">
                        <img class="mx-auto !w-[unset]"
                            src="{{ Vite::asset('resources/img/icons/steps/MATERIALS.svg') }}" alt="">
                    </picture>
                    <h5 class="text-white text-center pt-3">Materials</h5>
                    {{-- ----------------------- text desktop --}}
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        We are committed to excellence in all aspects of our operations, and one way we achieve this is
                        by carefully selecting suppliers who provide us with reliable, high-quality raw materials.
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-2">
                        In this way we are able to maintain a consistent level of product quality that meets the high
                        standards our customers expect from us.
                    </p>
                </div>
                {{-- ------------------- text mobile --}}
                <div class="col-span-full pt-5 lg:hidden bg-white-bg">
                    <p class="leading-tight px-5">
                        We strive for excellence by choosing only reliable and high-quality raw material suppliers
                        to
                        guarantee consistent product quality.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        Our rigorous quality systems ensure compliance with technical specifications and industry
                        standards
                        for superior results.
                    </p>
                </div>
            </div>
        </div>

        {{-- -------------------------cut of divs 2 Design --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 mt-8 mb-auto lg:my-auto pl-5 lg:pl-0">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/icons/steps/DESIGN.svg') }}"
                            alt="">
                    </picture>

                    <h5 class="text-white text-center pt-3">Design</h5>
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        We are a highly experienced team of engineers and designers with a deep understanding of
                        materials and reinforcement techniques. Using our proprietary design software, we create
                        customized and tailored solutions for each project, ensuring high accuracy and efficiency.
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-5">
                        We perform exhaustive tests and evaluations to ensure quality and durability, and maintain close
                        collaboration with customers and industry partners. Our commitment to innovation and research
                        enables us to develop advanced techniques and materials for slab reinforcement.
                    </p>
                </div>
                <picture class="col-span-3 lg:col-start-7 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- -------------------------------------- Text mobile --}}
                <div class="col-span-full lg:hidden pt-5 bg-white-bg">
                    <p class="leading-tight px-5">
                        We have a highly trained and experienced team of engineers and designers with in-depth knowledge
                        of materials and slab sizing and reinforcement techniques.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        As a design team, we have acquired a solid understanding of the relevant regulations and
                        standards
                        for the design of fiber-reinforced slabs.
                    </p>
                </div>
            </div>
        </div>

        {{-- -------------------------cut of divs 3 Aplication --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <picture class="col-span-3 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)" srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                <div class="col-start-4 col-span-2 lg:col-start-8 lg:col-span-4 mt-8 mb-auto lg:my-auto">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/icons/steps/APLICATION.svg') }}"
                            alt="">
                    </picture>
                    <h5 class="text-white text-center pt-3">Aplication</h5>
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        Once the final design is approved, we ensure precise fiber dosing by utilizing various methods
                        such as conveyor belts, dosage systems or manual dosing to the mixer truck.
                        <br> We guarantee the
                        exact dosage of the fiber per cubic meter and maintain quality by including the mixer truck,
                        which must mix the fiber for one minute per cubic meter for homogenization within the concrete.
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-5">
                        At our company, we are committed to delivering high-quality fiber-reinforced concrete solutions.
                        Our process includes customizing dosing methods, precise fiber dosage, and continuous quality
                        control measures. <br> Our team also encourages innovation and research to develop advanced
                        techniques and materials for slab reinforcement.
                    </p>
                </div>
                <div class="col-span-full lg:hidden p-5 bg-white-bg">
                    <p class="leading-tight px-5">
                        Once the final design is approved, we ensure precise fiber dosing by utilizing various methods
                        such as conveyor belts, dosage systems or manual dosing to the mixer truck. We guarantee the
                        exact dosage of the fiber per cubic meter and maintain quality by including the mixer truck,
                        which must mix the fiber for one minute per cubic meter for homogenization within the concrete.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        At our company, we are committed to delivering high-quality fiber-reinforced concrete solutions.
                        Our process includes customizing dosing methods, precise fiber dosage, and continuous quality
                        control measures. Our team also encourages innovation and research to develop advanced
                        techniques and materials for slab reinforcement. We are proud to provide efficient, high-quality
                        solutions for the construction industry.
                    </p>
                </div>
            </div>
        </div>
        {{-- -------------------------cut of divs 4 Follow up --}}
        <div class="swiper-slide">
            <div class="how-work-div grid gap-[15px] grid-cols-5 lg:grid-cols-12 bg-yellow-dark">
                <div class="col-span-2 lg:col-span-4 lg:col-start-2 mt-8 mb-auto lg:my-auto pl-5 lg:pl-5">
                    <picture class="">
                        <img class="mx-auto !w-[unset]" src="{{ Vite::asset('resources/img/icons/steps/FOLLOWUP.svg') }}"
                            alt="">
                    </picture>
                    <h5 class="text-white text-center pt-3">Follow up</h5>
                    <p class="hidden lg:block leading-tight text-white pl-3 pr-5 pt-5">
                        We prioritize customer satisfaction by establishing clear communication channels, efficient
                        problem-solving protocols, and continuous monitoring of customer feedback. Our employees are
                        adequately trained to handle customer service issues and are committed to delivering reliable
                        and efficient shipping and delivery options.
                    </p>
                    <p class="hidden lg:block leading-tight text-white pb-8 pl-3 pr-5 pt-5">
                        We maintain a customer-centric approach by ensuring that our services and products meet our
                        clients' specific needs. We value open communication, feedback, and continuous improvement to
                        remain ahead of our competition and provide exceptional service to the construction industry.
                    </p>
                </div>
                <picture class="col-span-3 lg:col-start-7 lg:col-span-6 mt-auto mb-2">
                    <source media="(min-width: 1000px)"
                        srcset="{{ Vite::asset('resources/img/how-work-img-pc.png') }}">
                    <img width="100%" src="{{ Vite::asset('resources/img/how-work-img.png') }}" alt="">
                </picture>
                {{-- -------------------------------------- Text mobile --}}
                <div class="col-span-full lg:hidden bg-white-bg pt-5">
                    <p class="leading-tight px-5">
                        We prioritize customer satisfaction by establishing clear communication channels, efficient
                        problem-solving protocols, and continuous monitoring of customer feedback. Our employees are
                        adequately trained to handle customer service issues and are committed to delivering reliable
                        and efficient shipping and delivery options.
                    </p>
                    <p class=" leading-tight pb-8 px-5 pt-5">
                        We maintain a customer-centric approach by ensuring that our services and products meet our
                        clients' specific needs. We value open communication, feedback, and continuous improvement to
                        remain ahead of our competition and provide exceptional service to the construction industry.
                    </p>
                </div>
            </div>
        </div>
        {{-- -------------------------cut of divs --}}
    </div>
</div>
