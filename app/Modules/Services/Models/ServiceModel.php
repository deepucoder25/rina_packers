<?php

namespace Modules\Services\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected array $services = [
        [
            'slug'     => 'household-moving',
            'title'    => 'House Shifting',
            'icon'     => 'fa-house-chimney',
            'desc'     => 'Complete door-to-door home relocation with 5-layer bubble packaging, specialized wardrobe boxes, and careful furniture assembly.',
            'features' => ['Zero damage guarantee', 'Custom crating for glassware', 'Unpacking & rearranging']
        ],
        [
            'slug'     => 'office-relocation',
            'title'    => 'Office Relocation',
            'icon'     => 'fa-briefcase',
            'desc'     => 'Minimal downtime workplace shifting, server racks handling, modular workstation relocation, and confidential files archiving.',
            'features' => ['Weekend / night shifting', 'IT & server equipment care', 'Project manager assigned']
        ],
        [
            'slug'     => 'vehicle-transportation',
            'title'    => 'Vehicle Transportation',
            'icon'     => 'fa-car',
            'desc'     => 'Dedicated enclosed multi-car carriers and customized wooden crating for sports bikes with transit tracking from start to finish.',
            'features' => ['Covered car trailers', 'Pre-transit scratch inspection', 'Doorstep pickup & drop']
        ],
        [
            'slug'     => 'loading-unloading',
            'title'    => 'Loading & Unloading',
            'icon'     => 'fa-truck-ramp-box',
            'desc'     => 'Trained, background-checked ground crew equipped with hydraulic lifters, ramps, dollies, and safety belts for heavy equipment.',
            'features' => ['Hydraulic lifting tools', 'Trained & courteous crew', 'Floor & door frame protection']
        ],
        [
            'slug'     => 'packing-moving',
            'title'    => 'Packing & Unpacking',
            'icon'     => 'fa-boxes-packing',
            'desc'     => 'Heavy duty double-wall corrugated cartons, air bubble rolls, foam corners, stretch wrap, and edge protectors for total safety.',
            'features' => ['Premium packaging material', 'Labelled item inventory', 'Fragile items specialized box']
        ],
        [
            'slug'     => 'warehouse-storage',
            'title'    => 'Storage Solutions',
            'icon'     => 'fa-warehouse',
            'desc'     => '24x7 CCTV monitored, moisture-controlled short and long-term storage facilities with flexible monthly billing plans.',
            'features' => ['Pest-controlled space', 'Fire safety equipped', 'Flexible weekly/monthly terms']
        ],
        [
            'slug'     => 'local-shifting',
            'title'    => 'Local Shifting',
            'icon'     => 'fa-truck-fast',
            'desc'     => 'Quick, hassle-free same-day intra-city shifting for apartments, villas, and small offices with dedicated local mini-trucks.',
            'features' => ['Same-day local delivery', 'GPS tracked fleet', 'Economical intra-city rates']
        ],
        [
            'slug'     => 'insurance-coverage',
            'title'    => 'Insurance Coverage',
            'icon'     => 'fa-shield-halved',
            'desc'     => 'Comprehensive transit and accidental risk insurance cover with swift 100% cashless claims settlement for complete peace of mind.',
            'features' => ['Full transit value cover', 'Cashless claims assistance', 'Instant policy issuance']
        ],
    ];

    public function getAll(): array
    {
        return $this->services;
    }

    public function getBySlug(string $slug): ?array
    {
        foreach ($this->services as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }
        return null;
    }
}
