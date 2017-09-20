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
        $__internal_43ac7d00989c0336c1bbd5ddba573546cb3608477d7e5c974ace36fd7d92c039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ac7d00989c0336c1bbd5ddba573546cb3608477d7e5c974ace36fd7d92c039->enter($__internal_43ac7d00989c0336c1bbd5ddba573546cb3608477d7e5c974ace36fd7d92c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_c79cee0e4fffacd4f50ca74d8e5527f8a9d00f5bcf302c98209f1584fba2564c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79cee0e4fffacd4f50ca74d8e5527f8a9d00f5bcf302c98209f1584fba2564c->enter($__internal_c79cee0e4fffacd4f50ca74d8e5527f8a9d00f5bcf302c98209f1584fba2564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\" style=\"margin-top: 5px\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
        echo "\">LRM</a>
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
                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\">Liste des candidats</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Clients <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_new");
        echo "\">Ajouter un client</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\">Liste des clients</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_new");
        echo "\">Ajouter une offre</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\">Liste des offres</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_new");
        echo "\">Pourvoir une offre</a></li>
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_index");
        echo "\">Suivre les offres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_43ac7d00989c0336c1bbd5ddba573546cb3608477d7e5c974ace36fd7d92c039->leave($__internal_43ac7d00989c0336c1bbd5ddba573546cb3608477d7e5c974ace36fd7d92c039_prof);

        
        $__internal_c79cee0e4fffacd4f50ca74d8e5527f8a9d00f5bcf302c98209f1584fba2564c->leave($__internal_c79cee0e4fffacd4f50ca74d8e5527f8a9d00f5bcf302c98209f1584fba2564c_prof);

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
        return array (  90 => 37,  86 => 36,  77 => 30,  73 => 29,  64 => 23,  60 => 22,  51 => 16,  47 => 15,  40 => 11,  33 => 7,  25 => 1,);
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
            <a class=\"navbar-brand\" href=\"{{ path('ma_lrm_accueil') }}\">LRM</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('ma_lrm_accueil') }}\">Accueil</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Candidats <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_candidat_new') }}\">Ajouter un candidat</a></li>
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
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_gestion_new') }}\">Pourvoir une offre</a></li>
                        <li><a href=\"{{ path('ma_lrm_gestion_index') }}\">Suivre les offres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
", "navbar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\navbar.html.twig");
    }
}
