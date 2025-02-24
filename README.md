# Moodle Shorttext customfield with regex validation
![Build Status](https://github.com/benyovszky/moodle-customfield_textregex/actions/workflows/gha.yml/badge.svg?branch=main) [![Releasing in the Plugins directory](https://github.com/benyovszky/moodle-customfield_textregex/actions/workflows/moodle-release.yml/badge.svg)](https://github.com/benyovszky/moodle-customfield_textregex/actions/workflows/moodle-release.yml)

Textregex customfield plugin allows to have a short text input field with regex validation. Enabling to ensure a valid format of the field data.

## Setting up the field
A Perl-compatible regular expression is used to validate the user input. Regex can be defined during the creation of the field itself, e.g., a course custom field. Because the regex definition might be challenging, we recommend using this plugin only if you can restrict the new field definitions to expert users. The plugin performs a regex validation on the server side when saving the field. Please add a detailed description for the field that explains the rules in a human-readable form, as most of the users will not understand the regex and, therefore, will be unable to correct their input unless you have a good description. For multi-language sites, currently, the only way to provide a translated description is to use a multilang filter on the site and provide a description in all used languages in the description field.

## Entering data to a field
Once the field is defined, users can use it like a regular text field. Enter data and store it. If the entered value does not match the regex, input will not be accepted, and the user will receive a standard notification, including the regex. Field data validation is performed on both the server and client sides.

## Course fields
This plugin cannot be used as a user profile field.
If you want to add regex validated fields to user profiles, please use https://moodle.org/plugins/profilefield_textregex plugin instead.
