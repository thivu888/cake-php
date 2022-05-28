<?php if (isset($products) && isset($products['data'])) { ?>
    <section class="main_slider_area">
        <div id="main_slider4" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <?php foreach ($products['data'] as &$productValue) { ?>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="public/img/home-slider/slider-9.jpg" data-rotate="0" data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?= $productValue['image'] ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text pink" data-x="['right','right','left','15','15','15']" data-hoffset="['-150','0','15','15','15','0']" data-y="['top','top','top','top']" data-voffset="['320','320','320','245','200']" data-fontsize="['60','60','60','40','30']" data-lineheight="['76','76','76','50','40']" data-width="['780','740','780','780','700','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]" data-textAlign="['left','left','left','left']"><?= $productValue['name'] ?> <br /> Tuyệt vời</div>

                            <div class="tp-caption tp-resizeme secand_text black" data-x="['right','right','left','15','15','15']" data-hoffset="['0','110','15','15','15','0']" data-y="['top','top','top','top']" data-voffset="['485','485','485','360','300','290']" data-fontsize="['20','20','20','20','16']" data-lineheight="['28','28','28','28']" data-width="['620','620','620','620','500','400']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-transform_idle="o:1;" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"><?= $productValue['description'] ?>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php } ?>