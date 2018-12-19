@extends('uiManager::layouts.app')

@section('content')
<div class="p-relative full-height">
    <div class="content v-align p-relative">
        <div>
            <div class="container mx-auto">
                <div class="grid-row text-center">
                    <div class="col-12">
                        @include('uiManager::components.branding.logo')
                        <main class="card card-contained my-3">
                            <header class="px-3 py-1">
                                <h5 class="my-1 text-grey-light text-thin">Getting Started</h5>
                            </header>
                            <article class="grid-row text-left">
                                <div class="col-12" style="height:450px;">
                                    <div class="scroll-content text-center py-3 px-xl" data-simplebar>
                                        <h2 class="h5 mb-2">Let's get this show on the road!</h2>
                                        <div class="card-block">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Hoc loco tenere se Triarius non potuit.</b> Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi. Duo enim genera quae erant, fecit tria. <i>At eum nihili facit;</i> Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Sed quanta sit alias, nunc tantum possitne esse tanta. Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. Duo Reges: constructio interrete. </p>

                                            <p>Unum est sine dolore esse, alterum cum voluptate. <a href="http://loripsum.net/" target="_blank">Scrupulum, inquam, abeunti;</a> <mark>Itaque fecimus.</mark> Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit; </p>

                                            <p>Quod quidem iam fit etiam in Academia. <mark>Sed fortuna fortis;</mark> <mark>Egone quaeris, inquit, quid sentiam?</mark> <i>Aliter enim explicari, quod quaeritur, non potest.</i> Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. <b>Quid censes in Latino fore?</b> Et harum quidem rerum facilis est et expedita distinctio. </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </main>
                    </div>
                    <div class="col-12">
                        <footer><small class="text-white text-center p-2 d-block">Copyright &copy. Ollie Ford & Co. All rights reserved.</small></footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection