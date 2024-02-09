<x-app-layout>
    <div class="basement">
		<div class="bm-bg-white bm-mt-2">
			<div 
				class="bm-flex-none md:bm-flex md:bm-justify-between bm-gap-x-4 bm-max-w-full bm-mx-auto bm-py-4 bm-px-4 sm:bm-px-4 lg:bm-px-4"
				data-echo-options="{{ json_encode($echoOptions) }}"
					x-ref="basementChatBox"
					x-data="basementChatBox"
			>
				<div class="bm-w-full md:bm-w-1/4 bm-mt-1 bm-border bm-border-sky-500 bm-text-gray-900">
					<x-basement::organisms.contacts-fullpage />
				</div>
				<div class="bm-w-full md:bm-w-3/4 bm-mt-1 bm-border bm-border-sky-500 bm-text-gray-900">
					<x-basement::organisms.private-messages-fullpage />
				</div>
			</div>
		</div>
    </div>
</x-app-layout>