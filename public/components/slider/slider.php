<!-- public/components/slider.php -->
<div class="slider-component flex flex-col items-center">
    <div>
        <h3>Une multitudes de destinations vous attend</h3>
        <p> en passant de la Norvège à l’Ile Maurice, ou encore le Costa Rica à Dubai, en finissant par celles qu’on connait le plus : la Thailande ou encore l’Inde !</p>
    </div>
    <div class="slider relative overflow-hidden">
        <div class="slides flex transition-transform duration-300">
            <div class="slide w-full flex-shrink-0">
                <div class="flex flex-col items-center">
                    <p>carrousel d’illustration des pays</p>
                </div>
            </div>
            <div class="slide w-full flex-shrink-0">
                <div class="flex flex-col items-center">
                    <p>carrousel d’illustration des pays</p>
                </div>
            </div>
            <div class="slide w-full flex-shrink-0">
                <div class="flex flex-col items-center">
                    <p>carrousel d’illustration des pays</p>
                </div>
            </div>
        </div>
        <button class="prev-slider left-0 top-1/2 transform -translate-y-1/2">Prev</button>
        <button class="next-slider right-0 top-1/2 transform -translate-y-1/2">Next</button>
    </div>
</div>

<script src="components/slider/slider.js"></script>
