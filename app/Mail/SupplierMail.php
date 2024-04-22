<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SupplierMail extends Mailable
{
    use Queueable, SerializesModels;

    private $supplier_name;
    private $supplier_adress;
    private $tel;
    private $email;
    private $supplier_site;
    private $production_capacity;
    private $type_products;
    private $category_products;
    private $description;


    /**
     * Create a new message instance.
     */
    public function __construct($supplier_name,$supplier_adress,$tel,$email,$supplier_site,$production_capacity,$type_products,$category_products,$description)
    {
        $this->supplier_name = $supplier_name;
        $this->supplier_adress = $supplier_adress;
        $this->tel = $tel;
        $this->email = $email;
        $this->supplier_site = $supplier_site;
        $this->production_capacity = $production_capacity;
        $this->type_products = $type_products;
        $this->category_products = $category_products;
        $this->description = $description;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Supplier Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'supplier_info',
            with:[
                'name' => $this->supplier_name,
                'adress' => $this->supplier_adress,
                'tel' => $this->tel,
                'email' => $this->email,
                'site' => $this->supplier_site,
                'capacity' => $this->production_capacity,
                'type' => $this->type_products,
                'category' => $this->category_products,
                'description' => $this->description,

            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
