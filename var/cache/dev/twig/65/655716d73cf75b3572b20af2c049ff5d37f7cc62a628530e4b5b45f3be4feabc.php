<?php

/* navbar.html.twig */
class __TwigTemplate_0f833ad109cda9047c6a107dde077f01cd06ecd37593a6c0290ac2f1043fd977 extends Twig_Template
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
        $__internal_81bbaeb84a6174e9f46be0f37320643d590dabbc6ed8e3e20d8bf6ecaa422157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bbaeb84a6174e9f46be0f37320643d590dabbc6ed8e3e20d8bf6ecaa422157->enter($__internal_81bbaeb84a6174e9f46be0f37320643d590dabbc6ed8e3e20d8bf6ecaa422157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_68e5037f180fadc59e6c48a1ca604134a0d9ba4ea044aa17f943817293a759f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e5037f180fadc59e6c48a1ca604134a0d9ba4ea044aa17f943817293a759f4->enter($__internal_68e5037f180fadc59e6c48a1ca604134a0d9ba4ea044aa17f943817293a759f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\" style=\"margin-top: 5px\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">LRM</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
        echo "\">Accueil</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Candidats <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_new");
        echo "\">Ajouter un candidat</a></li>
                        <li><a href=\"#\">Prévoir un entretien</a></li>
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\">Liste des candidats</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Clients <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_new");
        echo "\">Ajouter un client</a></li>
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\">Liste des clients</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_new");
        echo "\">Ajouter une offre</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\">Liste des offres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_81bbaeb84a6174e9f46be0f37320643d590dabbc6ed8e3e20d8bf6ecaa422157->leave($__internal_81bbaeb84a6174e9f46be0f37320643d590dabbc6ed8e3e20d8bf6ecaa422157_prof);

        
        $__internal_68e5037f180fadc59e6c48a1ca604134a0d9ba4ea044aa17f943817293a759f4->leave($__internal_68e5037f180fadc59e6c48a1ca604134a0d9ba4ea044aa17f943817293a759f4_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  71 => 30,  62 => 24,  58 => 23,  49 => 17,  44 => 15,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\" style=\"margin-top: 5px\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">LRM</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('ma_lrm_accueil') }}\">Accueil</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Candidats <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_candidat_new') }}\">Ajouter un candidat</a></li>
                        <li><a href=\"#\">Prévoir un entretien</a></li>
                        <li><a href=\"{{ path('ma_lrm_candidat_index') }}\">Liste des candidats</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Clients <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_client_new') }}\">Ajouter un client</a></li>
                        <li><a href=\"{{ path('ma_lrm_client_index') }}\">Liste des clients</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_emploi_new') }}\">Ajouter une offre</a></li>
                        <li><a href=\"{{ path('ma_lrm_emploi_index') }}\">Liste des offres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
", "navbar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\navbar.html.twig");
    }
}
