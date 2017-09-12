<?php

/* sidebar.html.twig */
class __TwigTemplate_4881fe4ec2c9963135bf7b6441d7c57ef66b1728fa7049b98234c968a5ee601e extends Twig_Template
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
        $__internal_2bdbd718e5a9ab3c0a0fdd6dd7c40925901c6bcc9b6b0034c2829ef6325a4b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdbd718e5a9ab3c0a0fdd6dd7c40925901c6bcc9b6b0034c2829ef6325a4b76->enter($__internal_2bdbd718e5a9ab3c0a0fdd6dd7c40925901c6bcc9b6b0034c2829ef6325a4b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_ca6ab41717b633f8b426882bf9287008af6b2cd90b951c012bc169fb344521ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6ab41717b633f8b426882bf9287008af6b2cd90b951c012bc169fb344521ab->enter($__internal_ca6ab41717b633f8b426882bf9287008af6b2cd90b951c012bc169fb344521ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

<div class=\"col-lg-2\" id=\"sideBar\">
    <div class=\"row\" id=\"deco_top\"></div>
    <div class=\"row\" id=\"accesRapide\">
        <h5>ACCES RAPIDE</h5>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES CLIENTS</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES OFFRES</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES CANDIDATS</a>
        </div>
    </div>
</div>





";
        
        $__internal_2bdbd718e5a9ab3c0a0fdd6dd7c40925901c6bcc9b6b0034c2829ef6325a4b76->leave($__internal_2bdbd718e5a9ab3c0a0fdd6dd7c40925901c6bcc9b6b0034c2829ef6325a4b76_prof);

        
        $__internal_ca6ab41717b633f8b426882bf9287008af6b2cd90b951c012bc169fb344521ab->leave($__internal_ca6ab41717b633f8b426882bf9287008af6b2cd90b951c012bc169fb344521ab_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  46 => 15,  38 => 10,  25 => 1,);
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

<div class=\"col-lg-2\" id=\"sideBar\">
    <div class=\"row\" id=\"deco_top\"></div>
    <div class=\"row\" id=\"accesRapide\">
        <h5>ACCES RAPIDE</h5>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_client_index') }}\" style=\"background-color: #e7e7e7\">LISTE DES CLIENTS</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_emploi_index') }}\" style=\"background-color: #e7e7e7\">LISTE DES OFFRES</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_candidat_index') }}\" style=\"background-color: #e7e7e7\">LISTE DES CANDIDATS</a>
        </div>
    </div>
</div>





", "sidebar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\sidebar.html.twig");
    }
}
