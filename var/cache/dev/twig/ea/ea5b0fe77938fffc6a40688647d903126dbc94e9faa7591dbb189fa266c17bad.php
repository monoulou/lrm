<?php

/* MAUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_cce8a60d559eb738ec3d2064a7fb2d2e2296d25268d726dd02bbe39a19cf1b26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82cce320627304cefbff5c0d18217b591640b7844df67d7bb6f5930aef376570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82cce320627304cefbff5c0d18217b591640b7844df67d7bb6f5930aef376570->enter($__internal_82cce320627304cefbff5c0d18217b591640b7844df67d7bb6f5930aef376570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show_content.html.twig"));

        $__internal_60032f444af9da896051a502b62c322128a2f258e722e1d88480e8f794ba25e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60032f444af9da896051a502b62c322128a2f258e722e1d88480e8f794ba25e6->enter($__internal_60032f444af9da896051a502b62c322128a2f258e722e1d88480e8f794ba25e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"profile_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8 col-lg-2\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
        echo "\"> Retour vers l'accueil</a></div>
    </div>

    <div class=\"row\">
        <h3 id=\"profile_title\">CONFIRMATION DU CHANGEMENT DE MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <p>Le mot de passe de l'utilisateur ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " a correctement été modifié</p>
            <!--<p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>-->
            <!--<p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>-->
        </div>

    </div>


</div>

";
        
        $__internal_82cce320627304cefbff5c0d18217b591640b7844df67d7bb6f5930aef376570->leave($__internal_82cce320627304cefbff5c0d18217b591640b7844df67d7bb6f5930aef376570_prof);

        
        $__internal_60032f444af9da896051a502b62c322128a2f258e722e1d88480e8f794ba25e6->leave($__internal_60032f444af9da896051a502b62c322128a2f258e722e1d88480e8f794ba25e6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_107fea6496147da2e1699b97f3c8ed7787e37fd735068559eb4eeeedd8958dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107fea6496147da2e1699b97f3c8ed7787e37fd735068559eb4eeeedd8958dc7->enter($__internal_107fea6496147da2e1699b97f3c8ed7787e37fd735068559eb4eeeedd8958dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79b66a792557551d94f10f724f2cca1df120d80864747f71957a4636fc17dea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b66a792557551d94f10f724f2cca1df120d80864747f71957a4636fc17dea3->enter($__internal_79b66a792557551d94f10f724f2cca1df120d80864747f71957a4636fc17dea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_79b66a792557551d94f10f724f2cca1df120d80864747f71957a4636fc17dea3->leave($__internal_79b66a792557551d94f10f724f2cca1df120d80864747f71957a4636fc17dea3_prof);

        
        $__internal_107fea6496147da2e1699b97f3c8ed7787e37fd735068559eb4eeeedd8958dc7->leave($__internal_107fea6496147da2e1699b97f3c8ed7787e37fd735068559eb4eeeedd8958dc7_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  79 => 3,  58 => 20,  52 => 19,  48 => 18,  36 => 9,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/profile_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"profile_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8 col-lg-2\"> <a href=\"{{ path('ma_lrm_accueil') }}\"> Retour vers l'accueil</a></div>
    </div>

    <div class=\"row\">
        <h3 id=\"profile_title\">CONFIRMATION DU CHANGEMENT DE MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <p>Le mot de passe de l'utilisateur {{ user.username }} a correctement été modifié</p>
            <!--<p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>-->
            <!--<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>-->
        </div>

    </div>


</div>

", "MAUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
