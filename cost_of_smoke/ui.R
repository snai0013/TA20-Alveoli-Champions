library("shiny")

#define IU
ui <- fluidPage(
    
    fluidRow(
        column(3,
               wellPanel(
                   radioButtons("GenderInput","Gender",
                                choices = c("Male","Female"),
                                selected = "Male"),
                   numericInput("HeightInput","Height in metres", value = FALSE, min = 1.1, max = 2.1, step = 0.1),
                   numericInput("AgeInput","Age in years", value = FALSE, min = 25, max = 80, step = 1),
                   numericInput("PFInput","Measured Peak Flow (L/min)", value = FALSE, min = 0, max = 700, step = 0.1)
               )),
        
        column(3,
               br(),
               br(),
               br(),
               br(),
               h2(imageOutput("face"), align = "center"),
        ),
        
        column(6,
               tabsetPanel(
                   tabPanel(h2(textOutput("EPF"), align = "left")),
                   tabPanel(h2(textOutput("PFR"), align = "left")),
                   tabPanel(h3(uiOutput("result"), align = "left"))
               )

        )
    )
    
)