<x-app-layout>
    <livewire:components.counter />
    <livewire:components.themeswitcher />
    <body class="bg-background text-foreground">
        <div class="container mx-auto p-4">
          <h1 class="text-2xl font-bold mb-4">Color Showcase</h1>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="p-4 bg-primary text-primary-foreground rounded-md">Primary</div>
            <div class="p-4 bg-secondary text-secondary-foreground rounded-md">Secondary</div>
            <div class="p-4 bg-muted text-muted-foreground rounded-md">Muted</div>
            <div class="p-4 bg-accent text-accent-foreground rounded-md">Accent</div>
            <div class="p-4 bg-destructive text-destructive-foreground rounded-md">Destructive</div>
          </div>
        </div>
      </body>
</x-app-layout>
