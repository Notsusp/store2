<x-app-layout>
<?php

    $samedayClient = new Sameday\SamedayClient('7ammakeyourdayTEST','b0QCo9$X','https://sameday-api.demo.zitec.com');
        $sameday = new Sameday\Sameday($samedayClient);
        echo json_encode($samedayClient);
        echo json_encode($sameday);
        exit;
        ?>
        /*try {
            // Get services for delivery.
            $sameday->getServices(new \Sameday\Requests\SamedayGetServicesRequest());
        } catch (\Sameday\Exceptions\SamedayServerException $e) {
            // When server returns an error.
            echo 'Server returned an error: ' . $e->getMessage();
            exit;
        } catch (\Sameday\Exceptions\SamedaySDKException $e) {
            // When validation fails or other local issues.
            echo 'Sameday SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $pickupPoints = $sameday->getPickupPoints(new \Sameday\Requests\SamedayGetPickupPointsRequest());
        $pickupPointId = $pickupPoints->getPickupPoints()[0]->getId();
        // Get list of available services for client.
$services = $sameday->getServices(new \Sameday\Requests\SamedayGetServicesRequest());
// Use first service id. These ids are different for DEMO and PROD environments. This id can be cached on your application.
// This is just for example purpose. Choose the right service for your app.
// For instance if requesting with 2H service (delivery in 2 hours) and cities are different (pickup point city and recipient city) then the validation will fail.
$serviceId = $services->getServices()[0]->getId();

try {
    $awb = $sameday->postAwb(new \Sameday\Requests\SamedayPostAwbRequest(
        $pickupPointId,
        null, // Contact person id can be left to NULL and default will be used.
        new \Sameday\Objects\Types\PackageType(\Sameday\Objects\Types\PackageType::PARCEL),
        [
            // This will generate an AWB expedition with 2 parcels (packages). Only the $weight is mandatory.
            new \Sameday\Objects\ParcelDimensionsObject(0.5),
            new \Sameday\Objects\ParcelDimensionsObject(3, 15, 28, 67)
        ],
        $serviceId,
        new \Sameday\Objects\Types\AwbPaymentType(\Sameday\Objects\Types\AwbPaymentType::CLIENT), // Who pays for the AWB. CLIENT is the only allowed value.
        new \Sameday\Objects\PostAwb\Request\AwbRecipientEntityObject('Huedin', 'Cluj', 'str. Otesani', 'Nume Destinatar', '0700111111', 'destinatar.colet@gmail.com', new \Sameday\Objects\PostAwb\Request\CompanyEntityObject('nume companie SRL')), // AWB recipient. Please note that CompanyEntityObject is optional if the recipient is not company.
        0, // Insured value.
        100 // Cash on delivery value. Can be 0 if the payment was made online.
        // Other parameters may follow, see https://github.com/sameday-courier/php-sdk/blob/master/docs/reference/SamedayPostAwbRequest.md
    ));
} catch (\Sameday\Exceptions\SamedayBadRequestException $e) {
    // When request fails validation. Show the list of validation errors.
    var_dump($e->getErrors());
    exit;
} // Other exceptions may be thrown, see https://github.com/sameday-courier/php-sdk/blob/master/docs/reference.md#core-exceptions

$pdf = $sameday->getAwbPdf(new \Sameday\Requests\SamedayGetAwbPdfRequest($awb->getAwbNumber(), new \Sameday\Objects\Types\AwbPdfType(\Sameday\Objects\Types\AwbPdfType::A6)));
echo $pdf->getPdf();
?>*/
    <div  x-data="productItem({{ json_encode([
                    'id' => $product->id,
                    'slug' => $product->slug,
                    'image' => $product->image ?: '/img/noimage.png',
                    'title' => $product->title,
                    'price' => $product->price,
                    'quantity' => $product->quantity,
                    'addToCartUrl' => route('cart.add', $product)
                ]) }})" class="container mx-auto">
        <div class="grid gap-6 grid-cols-1 lg:grid-cols-5">
            <div class="lg:col-span-3">
                <div
                    x-data="{
                      images: {{$product->images->count() ?
                 $product->images->map(fn($im) => $im->url) : json_encode(['/img/noimage.png'])}},
                      activeImage: null,
                      prev() {
                          let index = this.images.indexOf(this.activeImage);
                          if (index === 0)
                              index = this.images.length;
                          this.activeImage = this.images[index - 1];
                      },
                      next() {
                          let index = this.images.indexOf(this.activeImage);
                          if (index === this.images.length - 1)
                              index = -1;
                          this.activeImage = this.images[index + 1];
                      },
                      init() {
                          this.activeImage = this.images.length > 0 ? this.images[0] : null
                      }
                    }"
                >
                    <div class="relative">
                        <template x-for="image in images">
                            <div
                                x-show="activeImage === image"
                                class="aspect-w-3 aspect-h-2"
                            >
                                <img :src="image" alt="" class="w-auto mx-auto"/>
                            </div>
                        </template>
                        <a
                            @click.prevent="prev"
                            class="cursor-pointer bg-black/30 text-white absolute left-0 top-1/2 -translate-y-1/2"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 19l-7-7 7-7"
                                />
                            </svg>
                        </a>
                        <a
                            @click.prevent="next"
                            class="cursor-pointer bg-black/30 text-white absolute right-0 top-1/2 -translate-y-1/2"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </a>
                    </div>
                    <div class="flex">
                        <template x-for="image in images">
                            <a
                                @click.prevent="activeImage = image"
                                class="cursor-pointer w-[80px] h-[80px] border border-gray-300 hover:border-yellow-500 flex items-center justify-center"
                                :class="{'border-yellow-600': activeImage === image}"
                            >
                                <img :src="image" alt="" class="w-auto max-auto max-h-full"/>
                            </a>
                        </template>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <h1 class="text-lg font-semibold">
                    {{$product->title}}
                </h1>
                <div class="text-xl font-bold mb-6">{{$product->price}} Lei</div>
                @if ($product->quantity === 0)
                    <div class="bg-red-400 text-white py-2 px-3 rounded mb-3">
                        The product is out of stock
                    </div>
                @endif
                <div class="flex items-center justify-between mb-5">
                    <label for="quantity" class="block font-bold mr-4">
                        Quantity
                    </label>
                    <input
                        type="number"
                        name="quantity"
                        x-ref="quantityEl"
                        value="1"
                        min="1"
                        class="w-32 focus:border-yellow-500 focus:outline-none rounded"
                    />
                </div>
                <button
                    :disabled="product.quantity === 0"
                    @click="addToCart($refs.quantityEl.value)"
                    class="btn-primary py-4 text-lg flex justify-center min-w-0 w-full mb-6"
                    :class="product.quantity === 0 ? 'cursor-not-allowed' : 'cursor-pointer'"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                    Add to Cart
                </button>
                <div class="mb-6" x-data="{expanded: false}">
                    <div
                        x-show="expanded"
                        x-collapse.min.120px
                        class="text-gray-500 wysiwyg-content"
                    >
                        {!! $product->description !!}
                    </div>
                    <p class="text-right">
                        <a
                            @click="expanded = !expanded"
                            href="javascript:void(0)"
                            class="text-yellow-500 hover:text-yellow-700"
                            x-text="expanded ? 'Read Less' : 'Read More'"
                        ></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
