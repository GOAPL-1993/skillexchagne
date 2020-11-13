<x-jet-action-section>
    <div style="display:none">

        <x-slot name="title">
        </x-slot>

        <x-slot name="description">
        </x-slot>
    </div>
    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('一旦刪除帳戶後，該帳戶的所有資料將全部遺失！') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('刪除帳戶') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->


        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('刪除帳戶') }}
            </x-slot>

            <x-slot name="content">
                {{ __('請輸入密碼以確認刪除') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('您的密碼') }}" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('先不要') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('確認刪除') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>

    </x-slot>
</x-jet-action-section>