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
        $__internal_bc534fd94a49dcd533bcfc27a77af4b7e2efcfd0a346699808441c08176d5488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc534fd94a49dcd533bcfc27a77af4b7e2efcfd0a346699808441c08176d5488->enter($__internal_bc534fd94a49dcd533bcfc27a77af4b7e2efcfd0a346699808441c08176d5488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show_content.html.twig"));

        $__internal_d2e016b83a5cb271f4746443e634790b180357e4e438fb4a18b06546ef6fc204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e016b83a5cb271f4746443e634790b180357e4e438fb4a18b06546ef6fc204->enter($__internal_d2e016b83a5cb271f4746443e634790b180357e4e438fb4a18b06546ef6fc204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_bc534fd94a49dcd533bcfc27a77af4b7e2efcfd0a346699808441c08176d5488->leave($__internal_bc534fd94a49dcd533bcfc27a77af4b7e2efcfd0a346699808441c08176d5488_prof);

        
        $__internal_d2e016b83a5cb271f4746443e634790b180357e4e438fb4a18b06546ef6fc204->leave($__internal_d2e016b83a5cb271f4746443e634790b180357e4e438fb4a18b06546ef6fc204_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c5d69f756b5c0508a0fca9acf40188ce7f982b7f78f724540a56bf6397f222b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5d69f756b5c0508a0fca9acf40188ce7f982b7f78f724540a56bf6397f222b->enter($__internal_0c5d69f756b5c0508a0fca9acf40188ce7f982b7f78f724540a56bf6397f222b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8019bc8e7b7b980e6937404e33ea26680ef05596e5618a61a25031d8a7b4da60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8019bc8e7b7b980e6937404e33ea26680ef05596e5618a61a25031d8a7b4da60->enter($__internal_8019bc8e7b7b980e6937404e33ea26680ef05596e5618a61a25031d8a7b4da60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_8019bc8e7b7b980e6937404e33ea26680ef05596e5618a61a25031d8a7b4da60->leave($__internal_8019bc8e7b7b980e6937404e33ea26680ef05596e5618a61a25031d8a7b4da60_prof);

        
        $__internal_0c5d69f756b5c0508a0fca9acf40188ce7f982b7f78f724540a56bf6397f222b->leave($__internal_0c5d69f756b5c0508a0fca9acf40188ce7f982b7f78f724540a56bf6397f222b_prof);

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
