<x-app-layout>
    @section('content')
        <section class="checkout-area donation-area">
            <div class="container">
                <div class="row">

                    <!-- Start Donation Form -->
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="form billing-info donation-info">
                            <div class="title">
                                <h3>Realizar Donanciones</h3>
                            </div>

                            <div id="pp-button"></div>
                        </div>
                    </div>

                    <!-- End Donation Form -->

                    <!-- Start Donation Sidebar -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="checkout-area__sidebar donation-sidebar">
                            <!-- Start Donation Summary -->
                            <div class="checkout-area__sidebar-single donation-summary">
                                <div class="title">
                                    <h3>Donar otro valor</h3>
                                </div>
                                <div class="donation-payment">
                                    <form action="{{ route('donations.monto') }}" method="POST">
                                        @csrf <!-- Esto es importante para proteger el formulario contra CSRF -->
                                        <div class="field-input">
                                            <input type="number" name="monto" placeholder="Monto en USD"
                                                value="{{ old('monto', $amount / 100) }}" required min="5"
                                                step="0.01"
                                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                        </div>
                                        <div class="field-input">
                                            <br>
                                            <button type="submit" class="btn btn-primary"
                                                    style="width: 100%; background-color: #48bb78; border: none; padding: 10px 0; border-radius: 4px;">
                                                Actualizar mi Donación
                                            </button>
                                        </div>
                                    </form>
                                    <div style="text-align: center; margin-top: 10px;">
                                        <a href="{{ route('politicas') }}"
                                           style="color: #37388D; text-decoration: underline; font-size: 14px;">
                                           Conoce nuestras políticas
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <!-- End Donation Summary -->

                            <!-- Start Payment Information -->
                            <div class="checkout-area__sidebar-single donation-payment-info mb0">
                                <div class="title">
                                    <h3>Donaciones por Transferencia Bancaria</h3>
                                </div>
                                <div class="donation-payment">
                                    <div class="donation-payment__item donation-payment__item--active">
                                        <h3 class="donation-payment__title"></h3>
                                        <div class="donation-payment__content">
                                            Realiza tu donación directamente a nuestra cuenta bancaria:
                                            <ul>
                                                <li><strong>Banco:</strong> Banco del Austro</li>
                                                <li><strong>Número de cuenta:</strong> 0209329611</li>
                                                <li><strong>Tipo de cuenta:</strong> Corriente</li>
                                                <li><strong>Titular:</strong> <br/> Fundación Dios es bueno fiel y Justo </li>
                                                <li><strong>RUC:</strong> 0993390492001</li>
                                            </ul>
                                            <p>Por favor, envía el comprobante de tu transferencia a: </p>
                                            <p> <a href="mailto:donaciones@fundaciondiosesbuenofielyjusto.org"><small>donaciones@fundaciondiosesbuenofielyjusto.org</small></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Payment Information -->
                        </div>
                    </div>
                    <!-- End Donation Sidebar -->
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="form billing-info donation-info">
                            <form action="{{ route('donations.thankyou') }}" class="paymentWidgets"
                                data-brands="VISA MASTER DINERS DISCOVER AMEX">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-app-layout>

<script>
    function generateUniqueTransactionId() {
        return 'tx_' + Math.floor(Math.random() * 1000000000);
    }

    window.addEventListener('DOMContentLoaded', () => {
        const token = '{{ $token }}';
        const amount = {{ $amount }};
        const amountWithoutTax = {{ $amountWithoutTax }};
        const amountWithTax = {{ $amountWithTax }};
        const tax = {{ $tax }};
        const service = {{ $service }};
        const tip = {{ $tip }};
        const reference = '{{ $reference }}';
        const clientTransactionId = generateUniqueTransactionId();

        ppb = new PPaymentButtonBox({
            token: token,
            amount: amount,
            amountWithoutTax: amountWithoutTax,
            amountWithTax: amountWithTax,
            tax: tax,
            service: service,
            tip: tip,
            reference: reference,
            clientTransactionId: clientTransactionId,
        }).render('pp-button');

        const buttonElement = document.querySelector('#pp-button');
        if (buttonElement) {
            const checkExist = setInterval(() => {
                const messageButton = buttonElement.querySelector('.message-button');
                if (messageButton) {
                    messageButton.innerText = 'Donar';
                    clearInterval(checkExist);
                }
            }, 100);
        }
    });
</script>
