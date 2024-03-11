# Cashfree Payout PHP SDK
![GitHub](https://img.shields.io/github/license/cashfree/cashfree-payout-sdk-php) ![Discord](https://img.shields.io/discord/931125665669972018?label=discord) ![GitHub last commit (branch)](https://img.shields.io/github/last-commit/cashfree/cashfree-payout-sdk-php/master) ![GitHub release (with filter)](https://img.shields.io/github/v/release/cashfree/cashfree-payout-sdk-php?label=latest) ![GitHub forks](https://img.shields.io/github/forks/cashfree/cashfree-payout-sdk-php)

The Cashfree Payout PHP SDK offers a convenient solution to access [Cashfree Payout APIs](https://docs.cashfree.com/reference/payouts-version2-apis) from a server-side Go  applications.



## Documentation

Cashfree's Payout API Documentation - https://docs.cashfree.com/reference/payouts-version2-apis

Learn and understand payout workflows at Cashfree Payments [here](https://docs.cashfree.com/docs/payouts

Try out our interactive guides at [Cashfree Dev Studio](https://www.cashfree.com/devstudio) !

## Getting Started

`Note:` This README is for the current branch and not necessarily what's released in `Composer`

### Installation
```bash
composer require cashfree/cashfree-payout
```
### Configuration

```php
\Cashfree\Cashfree::$XClientId = "<x-client-id>";
\Cashfree\Cashfree::$XClientSecret = "<x-client-secret>";
\Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;
```

Generate your API keys (x-client-id , x-client-secret) from [Cashfree Merchant Dashboard](https://merchant.cashfree.com/merchants/login)

## Licence

Apache Licensed. See [LICENSE.md](LICENSE.md) for more details
