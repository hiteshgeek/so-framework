# SixOrbit UI Framework Documentation

Welcome to the SixOrbit UI Framework documentation. This guide covers the build system, bundle options, and component architecture.

## Table of Contents

1. [Bundle Options](./bundles.md) - Understanding Core vs Full bundles
2. [Build System](./build.md) - How to compile CSS and JS files
3. [Project Structure](./structure.md) - Directory layout and file organization

## Quick Start

### Installation

```bash
# Install dependencies
npm install

# Build all files
node build.js

# Build in development mode (no minification)
node build.js --dev
```

### Including in Your Project

```html
<!-- CSS -->
<link rel="stylesheet" href="dist/css/sixorbit-full.css">

<!-- JS -->
<script src="dist/js/sixorbit-full.js"></script>
```

## Framework Architecture

```
┌─────────────────────────────────────────────────────────┐
│                    SixOrbit UI Framework                │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  ┌─────────────────┐      ┌─────────────────────────┐  │
│  │  sixorbit-core  │  ⊂   │     sixorbit-full       │  │
│  │  (Essential)    │      │  (All Components)       │  │
│  └─────────────────┘      └─────────────────────────┘  │
│                                                         │
├─────────────────────────────────────────────────────────┤
│                    Page-Specific Files                  │
│  ┌─────────────────────────────────────────────────┐   │
│  │  global.css / global.js                         │   │
│  │  (Sidebar, Navbar, Search - App-specific)       │   │
│  └─────────────────────────────────────────────────┘   │
└─────────────────────────────────────────────────────────┘
```

## Key Concepts

### Framework vs Page-Specific

| Type | Location | Purpose |
|------|----------|---------|
| **Framework** | `dist/css/`, `dist/js/` | Reusable components (buttons, cards, modals) |
| **Page-Specific** | `dist/pages/global/` | App-specific features (sidebar, navbar, search) |

### Why Separate?

- **Framework**: Generic UI components that work in any project
- **Page-Specific**: Layout and navigation specific to your application

This separation allows the framework to remain lightweight while your app-specific code stays organized.
