<?php


namespace Fypex\BamboocardClient\Models;


use Fypex\BamboocardClient\Denormalizer\ProductsDenormalizer;

class Brand
{

    private $name;
    private $countryCode;
    private $currencyCode;
    private $description;
    private $disclaimer;
    private $redemptionInstructions;
    private $terms;
    private $logoUrl;
    private $modifiedDate;
    private $products;
    private $productKeys;

    public function __construct(array $brand)
    {

        $this->name = $brand['name'];
        $this->countryCode = $brand['countryCode'];
        $this->currencyCode = $brand['currencyCode'];
        $this->description = $brand['description'];
        $this->disclaimer = $brand['disclaimer'];
        $this->redemptionInstructions = $brand['redemptionInstructions'];
        $this->terms = $brand['terms'];
        $this->logoUrl = $brand['logoUrl'];
        $this->modifiedDate = $brand['modifiedDate'];

        $products = ProductsDenormalizer::denormalize($brand['products']);

        $this->products = $products;

        foreach ($products as $product){
            $this->productKeys[$product->getName()] = $product;
        }

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDisclaimer(): ?string
    {
        return $this->disclaimer;
    }

    /**
     * @return string
     */
    public function getRedemptionInstructions(): ?string
    {
        return $this->redemptionInstructions;
    }

    /**
     * @return string
     */
    public function getTerms(): ?string
    {
        return $this->terms;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->modifiedDate;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function getProductByName(string $name): Product
    {
        return $this->productKeys[$name];
    }

}
