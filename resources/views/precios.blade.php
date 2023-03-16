@extends('index')

@section('content')
    <div class="pricing pricing--yama pb-5 row" id="price">
        <div class="col-lg-12">
            <div class="section-heading">
                <h2>Precios</h2>
                <p>Porque nos importa tu salud y mejorar tu estilo de vida, nos adecuados a tus tiempos y espacios,
                    brindando a todos la posibilidad de formar patrte de la familia REBURN, con los siguientes planes:
                </p>
            </div>
        </div>
        <div class="pricing__item col-lg-3 col-md-6 col-sm-12">
            <h3 class="pricing__title">Básico</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>199<span
                    class="pricing__period">/Mensual</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">Acceso a todo el espacio y equipo.</li>
                <li class="pricing__feature">Acceso a regaderas.</li>
                <li class="pricing__feature">Acceso a locker, solo mientras este en el Gimnasio.</li>
                <li class="pricing__feature">Turno Matutino o Vespertino.</li>
            </ul>
            <a href="https://wa.me/+529842056758?text=Hola!, Me interesa el plan Básico" class="pricing__action"
                target="_blank">Elegir este plan</a>
        </div>
        <div class="pricing__item col-lg-3 col-md-6 col-sm-12">
            <h3 class="pricing__title">Estándar</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>299<span
                    class="pricing__period">/Mensual</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">Acceso a todo el espacio y equipo.</li>
                <li class="pricing__feature">Acceso 24/7.</li>
                <li class="pricing__feature">Acceso a regaderas y espacios de recreación.</li>
                <li class="pricing__feature">Acceso a locker, solo mientras este en el Gimnasio.</li>
                <li class="pricing__feature">Atención de un entrenador general.</li>

            </ul>
            <a href="https://wa.me/+529842056758?text=Hola!, Me interesa el plan Estándar" class="pricing__action"
                target="_blank">Elegir este plan</a>
        </div>
        <div class="pricing__item col-lg-3 col-md-6 col-sm-12">
            <h3 class="pricing__title">Popular</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>349<span
                    class="pricing__period">/Mensual</span></div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">Acceso a todo el espacio y equipo.</li>
                <li class="pricing__feature">Acceso 24/7.</li>
                <li class="pricing__feature">Acceso a regaderas y espacios de recreación.</li>
                <li class="pricing__feature">Acceso a locker único.</li>
                <li class="pricing__feature">Atención de un entrenador personalizado.</li>
            </ul>
            <a href="https://wa.me/+529842056758?text=Hola!, Me interesa el plan Popular" class="pricing__action"
                target="_blank">Elegir este plan</a>
        </div>
        <div class="pricing__item col-lg-3 col-md-6 col-sm-12">
            <h3 class="pricing__title">Premium</h3>
            <div class="pricing__price"><span class="pricing__currency">$</span>499<span
                    class="pricing__period">/Mensual</span>
            </div>
            <ul class="pricing__feature-list">
                <li class="pricing__feature">Acceso a todo el espacio y equipo.</li>
                <li class="pricing__feature">Acceso 24/7.</li>
                <li class="pricing__feature">Acceso a regaderas y espacios de recreación.</li>
                <li class="pricing__feature">Acceso a locker único.</li>
                <li class="pricing__feature">Atención de un entrenador personalizado.</li>
                <li class="pricing__feature">Atención de un nutriólogo una vez por semana.</li>
            </ul>
            <a href="https://wa.me/+529842056758?text=Hola!, Me interesa el plan Premium" class="pricing__action"
                target="_blank">Elegir este plan</a>
        </div>
    </div>
@endsection
