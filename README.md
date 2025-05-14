# Lotus Mu

Lotus Mu is a comprehensive multi-server platform for Mu Online custom servers, offering an integrated ecosystem for game server management, player interactions, and monetization. This production-ready application powers [lotusmu.org](https://lotusmu.org).

## Overview

Lotus Mu acts as a central management system for Mu Online game servers, providing players with account management, rankings, virtual currency handling, and more, while giving administrators powerful tools to manage all aspects of the gaming community.

## Key Features

### Multi-Server Architecture

-   Dynamic database connection system for certain game models that switches between different game server databases at runtime
-   Session-based server selection that maintains the currently selected game server connection
-   Clean model interface that automatically uses appropriate database connections without modifying core logic
-   Simultaneous connection to both web application database and multiple game server databases

### User Management

-   Synchronization between web application users and game database accounts
-   Secure email verification flow with temporary credential storage
-   Custom solution for handling the game's plain-text password requirement while maintaining security
-   Profile management with extensive customization options

### Virtual Economy

-   Comprehensive wallet system for virtual currency management
-   Currency transfers between users and in-game characters
-   Currency conversion between different in-game currencies
-   Transaction logging and validation for security and accountability

### Payment Processing

-   Integration with multiple payment providers:
    -   PayPal
    -   Stripe
    -   PrimePayments
-   Detailed transaction and order tracking
-   Configurable payment packages
-   Complete purchase history for users and administrators

### Ranking System

-   Custom database procedures for accurate player rankings
-   Scheduled commands for regular data updates
-   Configurable ranking parameters and display options
-   Multiple ranking categories (levels, resets, etc.)

### Admin Panel

-   Built with FilamentPHP for a powerful and intuitive interface
-   Comprehensive dashboard with real-time analytics:
    -   User activity metrics
    -   Revenue tracking
    -   Server performance statistics
-   Referral and survey statistics
-   Configuration management for:
    -   Ranking systems
    -   Prize distributions
    -   Event schedules with real-time countdown timers
    -   Server connections
    -   Payment packages
-   Order management
-   Ticketing system administration
-   News and announcement system
-   And more ...

## Technology Stack

### Backend

-   Laravel - Core PHP framework
-   MySQL - Database for web application
-   MSSQL - Connection to game server databases
-   FilamentPHP - Admin panel framework

### Frontend

-   Livewire (with Volt Class API) - Interactive components
-   FluxUI - Component library
-   Tailwind CSS - Styling
-   Alpine.js - JavaScript interactions

### Infrastructure

-   Scheduled commands for automated tasks
-   Queued jobs for background processing
-   Redis for caching and queue management
-   Multiple database connections management

### Scalable Backend Design

Built with growth in mind:

-   Modular architecture for easy addition of new game servers
-   Optimized database queries for high performance
-   Caching strategies for frequently accessed data
-   Queue management for background processing
