# Kaizala Custom Action Template

This template allows you to quickly create custom actions with the following features:
1. Upload of single images from camera or file
2. Upload of multiple images from camera or file
3. Pulling custom data from external APIs and populating the data in a select box

### Getting Started...

### Project Setup

**1. Clone this repository**

```sh
git clone https://github.com/nanyukiappfactory/custom-action-template.git

```

**2. Delete the .git folder**

**3. Open package.json to configure the action card**

```sh
Adjust the following properties:

"id": "com.your.package.id"
"version": "1"
"minorVersion": 1
"providerName": "{Your Name}"
"displayName": "{Action Card Name}"
"description": "{Action Card Description}"
"icon": "{Desired png icon}"

```

**4. Open AppModel.json and add the questions that you would like to be answered in your action card**

```sh
These questions are the data attributes that your action card will submit. Do not remove the following questions from the AppModel.json
  Name
  Phone
  Location
  Response Time

This file contains sample questions and data types that can be captured. Data types include
  Image
  Text
  Numeric
  SingleSelect
  AttachmentList
  Location
  DateTime

The questions are the identifiers of data that you will submit

```

**5. Open strings.json to adjust the names of the identifiers as will be presented to the user of the action card**

```sh
You can adjust any strings except the ones that begin with the prefix str or the following:
  Name
  Phone
  Location
  Response Time
```

### Deployment
```sh
You are now ready to deploy. Go through the following steps:
  1. Zip your files (do not have any folders in the zip file)
  2. Go to https://manage.kaiza.la and sign in with your O365 credentials
  3. Navigate to Extensions > Actions
  4. Click on import on the top right side
  5. Upload your action card
  6. Stage it
  7. Activate it
  8. Add it to a group of your choice
  9. Make it available to Admin &/or Members &/or Subscribers depending on your group type
  10. Access it from Kaizala on your phone :-)
```
