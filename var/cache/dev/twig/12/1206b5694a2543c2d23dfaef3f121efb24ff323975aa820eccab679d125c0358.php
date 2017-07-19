<?php

/* ::sidebar.html.twig */
class __TwigTemplate_deb36e6e734d895424648ac854feb18b51c4f47e0c52918483270df86ba855f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c365edc8d358fef05779b20112e93ec9213d17bb685148807e41a81311f333d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c365edc8d358fef05779b20112e93ec9213d17bb685148807e41a81311f333d->enter($__internal_5c365edc8d358fef05779b20112e93ec9213d17bb685148807e41a81311f333d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        $__internal_52299341aa2ac524ef45c917ec6dd84680a07cf693f0b22ecaf8569e5e91c095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52299341aa2ac524ef45c917ec6dd84680a07cf693f0b22ecaf8569e5e91c095->enter($__internal_52299341aa2ac524ef45c917ec6dd84680a07cf693f0b22ecaf8569e5e91c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 750px; margin-bottom: 10px\">
    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <h5>ACCES RAPIDE</h5>
    </div>


    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_new");
        echo "\" style=\"background-color: #e7e7e7\">AJOUTER UN CANDIDAT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_new");
        echo "\" style=\"background-color: #e7e7e7\">AJOUTER UN CLIENT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"#\" style=\"background-color: #e7e7e7\">AJOUTER UNE OFFRE</a>
        </div>
    </div>



</div>

";
        
        $__internal_5c365edc8d358fef05779b20112e93ec9213d17bb685148807e41a81311f333d->leave($__internal_5c365edc8d358fef05779b20112e93ec9213d17bb685148807e41a81311f333d_prof);

        
        $__internal_52299341aa2ac524ef45c917ec6dd84680a07cf693f0b22ecaf8569e5e91c095->leave($__internal_52299341aa2ac524ef45c917ec6dd84680a07cf693f0b22ecaf8569e5e91c095_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  39 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset ('css/index.css') }}\" rel='stylesheet' type='text/css' />

<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 750px; margin-bottom: 10px\">
    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <h5>ACCES RAPIDE</h5>
    </div>


    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_candidat_new') }}\" style=\"background-color: #e7e7e7\">AJOUTER UN CANDIDAT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_client_new') }}\" style=\"background-color: #e7e7e7\">AJOUTER UN CLIENT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"#\" style=\"background-color: #e7e7e7\">AJOUTER UNE OFFRE</a>
        </div>
    </div>



</div>

", "::sidebar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/sidebar.html.twig");
    }
}
