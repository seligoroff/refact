namespace App\Models\Traits\User;

use Illuminate\Support\Facades\Log;

trait UserLegacyAttributes
{
    protected function logLegacyAccess(string $attribute): void
    {
        // Тут прописываем полезную инфу с трэйсом
    }

    public function getUFnameAttribute(): ?string
    {
        $this->logLegacyAccess('u_fname');
        return $this->first_name;
    }

    public function getULnameAttribute(): ?string
    {
        $this->logLegacyAccess('u_lname');
        return $this->family_name;
    }

    public function getUSnameAttribute(): ?string
    {
        $this->logLegacyAccess('u_sname');
        return $this->parent_name;
    }

    public function getUStatusAttribute(): ?bool
    {
        $this->logLegacyAccess('u_status');
        return $this->status;
    }

    public function getUBdateAttribute(): ?string
    {
        $this->logLegacyAccess('u_bdate');
        return $this->birthday;
    }

    public function getUPropertiesAttribute(): object
    {
        $this->logLegacyAccess('u_properties');
        return $this->properties;
    }
}
